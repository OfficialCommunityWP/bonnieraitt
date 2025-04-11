// Custom initialization for OCC2Widget
document.addEventListener("DOMContentLoaded", function () {
  // Add classes and elements needed for the widget UI
  // const widgetRoot = document.getElementById('occ2-widget-root');
  // if (widgetRoot) {
  //   // Create wrapper elements if they don't exist from the React component
  //   setTimeout(() => {
  //     // This timeout ensures the React component has rendered
  //     if (!widgetRoot.querySelector('.occ2-tab-button')) {
  //       // Create tab button if it doesn't exist
  //       const tabButton = document.createElement('div');
  //       tabButton.className = 'occ2-tab-button';
  //       tabButton.textContent = 'Community';
  //       // Create content wrapper if needed
  //       if (!widgetRoot.querySelector('.occ2-widget-content')) {
  //         const content = document.createElement('div');
  //         content.className = 'occ2-widget-content';
  //         // Move any existing widget content into this wrapper
  //         while (widgetRoot.firstChild) {
  //           content.appendChild(widgetRoot.firstChild);
  //         }
  //         widgetRoot.appendChild(content);
  //       }
  //       widgetRoot.appendChild(tabButton);
  //       // Add click handler for the tab button
  //       tabButton.addEventListener('click', function() {
  //         widgetRoot.classList.toggle('open');
  //       });
  //     }
  //   }, 500);
  // }
});
