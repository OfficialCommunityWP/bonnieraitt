var OCC = OCC || {};

// Requires  https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js
// Documentation at https://github.com/js-cookie/js-cookie

// ATTN: MEMBERSHIP URL NEEDS TO BE EDITED HERE
//OCC.MembershipUrl = "https://localhost:44382";
OCC.MembershipUrl = "https://members.bonnieraitt.com";

// Global Settings
OCC.AuthenticationCookieName = "NOPCOMMERCE.AUTH";
OCC.AuthenticationCookieExpiresInDays = 31;
OCC.AuthenticationCookieSameSite = 'lax';  // see documentation
OCC.LoginUrl = "/api/Membership/login";
OCC.LogoutUrl = "/api/Membership/logout";

OCC.Membership = function (
    membershipUrlSetting,
    authenticationCookieSetting,
    expiresInDaysSetting,
    sameSiteSetting
    ) {
    var root = membershipUrlSetting;
    var domain = location.hostname.split('.').slice(-2).join('.');
    if (domain != 'localhost')
        domain = '.' + domain;

    var authenticationCookieName = authenticationCookieSetting;
    var expiresInDays = expiresInDaysSetting;
    var sameSite = sameSiteSetting;
    var rememberMeForLastSignIn = undefined;
    var username = "";


    function isLoggedIn() {
        username = "";
        var result = false;
        var token = getCookie(authenticationCookieName);
        if (token) {
            username = unescape(token);
            result = true;
        }

        return result;
    }

    function getUserName() {
        return username;
    }

    async function apiLoginAsync(email, password, rememberMe, onSuccessLogInCallback, onErrorLoginCallback) {

        // This is important because the API cannot decode payload if not done this way
        var payload = {
            email: email,
            password: password,
            rememberme: rememberMe // Has to be a bool
        };

        var json = JSON.stringify(payload)

        const requestOptions = {
            method: 'POST',
            mode: 'cors',
            credentials: 'include',
            headers: { 'Content-Type': 'application/json' },
            body: json
        };

        var signInUrl = root + OCC.LoginUrl;

        var result = false;


        await fetch(signInUrl, requestOptions)
            .then(async response => {
                if (response.ok) {
                    response.json().then(json => {
                        username = json.email;
                        createAuthenticationCookie(
                            authenticationCookieName,
                            username,
                            rememberMe,
                            expiresInDays,
                            sameSite
                        );
                        onSuccessLogInCallback(json);
                        result = true;
                    });
                }
                else {
                    removeAuthenticationCookie(
                        authenticationCookieName,
                        expiresInDays,
                        sameSite
                    );
                    response.text().then(text => {
                        username = "";
                        onErrorLoginCallback(text);
                    });
                }
            });

        return result;
    }

    async function apiLogoutAsync(onSuccessLogoutCallback, onErrorLogoutCallback) {
        // Always remove cookie
        removeAuthenticationCookie(
            authenticationCookieName,
            expiresInDays,
            sameSite
        );

        var result = false;

        const requestOptions = {
            method: 'POST',
            mode: 'cors',
            credentials: 'include'
        };

        var signOutUrl = root + OCC.LogoutUrl;

        await fetch(signOutUrl, requestOptions)
            .then(async response => {
                username = "";
                if (!response.ok) {
                    response.text().then(text => {
                        onErrorLogoutCallback(text);
                    });
                }
                else {
                    onSuccessLogoutCallback();
                    result = true;
                }
            });

        return result;
    }

    function getCookie(cookieName) {
        return Cookies.get(cookieName)
    }

    function createAuthenticationCookie(cookieName, value, rememberMe, expiresIn, sameSite) {
        rememberMeForLastSignIn = rememberMe;
        if (rememberMe) {
            Cookies.set(cookieName, value,
                {
                    path: '/',
                    expires: expiresIn,
                    secure: true,
                    sameSite: sameSite,
                    domain: domain
                });
        }
        else {
            Cookies.set(cookieName, value,
                {
                    path: '/',
                    secure: true,
                    sameSite: sameSite,
                    domain: domain
                });
        }
    }

    function removeAuthenticationCookie(cookieName, expiresIn, sameSite) {
        if (!lastSignInUsedRememberMe()) {
            Cookies.remove(cookieName, 
                {
                    path: '/',
                    secure: true,
                    sameSite: sameSite,
                    domain: domain
                });
        }
        else {
            Cookies.remove(cookieName, 
                {
                    path: '/',
                    expires: expiresIn,
                    secure: true,
                    sameSite: sameSite,
                    domain: domain
                });
        }
    }

    function lastSignInUsedRememberMe() {
        if (isUndefinedOrNull(rememberMeForLastSignIn))
            return false;

        if (typeof rememberMeForLastSignIn == 'bool')
            return rememberMeForLastSignIn;

        return false;
    }

    function isUndefinedOrNull(value) {
        return typeof value == 'undefined' || value === null;
    }

    return {
        ApiLoginAsync: apiLoginAsync,
        ApiLogoutAsync: apiLogoutAsync,
        IsLoggedIn: isLoggedIn,
        UserName: getUserName,
    };
};

OCC.Membership = OCC.Membership(
    OCC.MembershipUrl,
    OCC.AuthenticationCookieName,
    OCC.AuthenticationCookieExpiresInDays,
    OCC.AuthenticationCookieSameSite
);
