

document.addEventListener('DOMContentLoaded', function () {
  const areas = document.querySelectorAll('area');
  const tooltip = document.getElementById('tooltip');
  const tooltipPosition = { x: 750, y: 50 }; // Position of the tooltip relative to the page

  areas.forEach(function (area) {
    area.addEventListener('mouseover', function (event) {
      let tooltipContent;
      // Set tooltip content based on the area hovered
      switch (event.target.getAttribute('data-tooltip')) {
        case 'Phoenix LegMod':
          tooltipContent = tooltipContent1.replace(/\n/g, '<br>'); // Replace newline with HTML line break
          break;
        case 'tooltip2':
          tooltipContent = tooltipContent2.replace(/\n/g, '<br>'); // Replace newline with HTML line break
          break;
        // Add more cases for additional tooltips if needed
        default:
          tooltipContent = "";
      }
      if (tooltipContent) {
        tooltip.innerHTML = tooltipContent; // Render HTML content
        tooltip.style.top = (tooltipPosition.y) + 'px'; // Fixed y position
        tooltip.style.left = (tooltipPosition.x) + 'px'; // Fixed x position
        tooltip.style.display = 'block';
      }
    });

    area.addEventListener('mouseout', function () {
      tooltip.style.display = 'none';
    });
  });
});