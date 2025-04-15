import React from "react";
import Frame from "react-frame-component";
import { OCC2Widget } from "occ2-widget";

function App() {
  return (
    <Frame
      style={{ width: "100%", height: "100%", border: "none" }}
      head={
        <>
          <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet"
          />
          <link
            rel="stylesheet"
            href="https://unpkg.com/occ2-widget@latest/dist/index.css"
          />
        </>
      }
    >
      <OCC2Widget theme="dark" position="right" isOpen={false} />
    </Frame>
  );
}

// Export the App component so it can be used by webpack
export default App;

// Wait for DOM to be fully loaded before attempting to render
document.addEventListener("DOMContentLoaded", () => {
  // Check if the element exists in the DOM
  const rootElement = document.getElementById("occ2-widget-root");
  if (rootElement) {
    import("react-dom/client").then(({ createRoot }) => {
      const root = createRoot(rootElement);
      root.render(<App />);
    });
  } else {
    console.error(
      "Could not find element with ID 'occ2-widget-root' to mount the OCC2Widget"
    );
  }
});
