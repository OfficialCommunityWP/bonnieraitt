// Simple implementation that loads the OCC2 widget
document.addEventListener('DOMContentLoaded', function() {
  try {
    // Create a container for the widget
    const container = document.getElementById('occ2-widget-container') || 
                     document.createElement('div');
    
    if (!document.getElementById('occ2-widget-container')) {
      container.id = 'occ2-widget-container';
      document.body.appendChild(container);
    }
    
    // Check if the script is loaded via CDN or other method
    if (typeof OCC2Widget !== 'undefined') {
      // Initialize the widget using the global variable
      new OCC2Widget({
        theme: "dark",
        position: "right",
        container: '#occ2-widget-container'
      });
      
      console.log('OCC2Widget loaded successfully');
    } else {
      console.error('OCC2Widget is not defined. Make sure the widget script is loaded.');
    }
  } catch (error) {
    console.error('Error initializing OCC2Widget:', error);
  }
});