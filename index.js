import React from "react";
import { OCC2Widget } from "occ2-widget";

function App() {
  return (
    <OCC2Widget
      theme="dark" // Optional: 'light' | 'dark'
      position="right" // Optional: 'left' | 'right'
      isOpen={false}
    />
  );
}

// Export the App component so it can be used by webpack
export default App;

// Wait for DOM to be fully loaded before attempting to render
document.addEventListener('DOMContentLoaded', () => {
  // Check if the element exists in the DOM
  const rootElement = document.getElementById("occ2-widget-root");
  if (rootElement) {
    import("react-dom/client").then(({ createRoot }) => {
      const root = createRoot(rootElement);
      root.render(<App />);
    });
  } else {
    console.error("Could not find element with ID 'occ2-widget-root' to mount the OCC2Widget");
  }
});
