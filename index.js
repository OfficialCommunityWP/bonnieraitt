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

// Render the component to the DOM when using as a standalone app
if (document.getElementById("occ2-widget-root")) {
  import("react-dom/client").then(({ createRoot }) => {
    const root = createRoot(document.getElementById("occ2-widget-root"));
    root.render(<App />);
  });
}
