document.addEventListener('DOMContentLoaded', function() {
  const image = document.getElementById('image');
  const tooltip = document.getElementById('tooltip');

  image.addEventListener('mouseover', function(event) {
    const target = event.target;
    if (target.tagName === 'AREA') {
      const coords = target.coords.split(',');
      const x = parseInt(coords[0]);
      const y = parseInt(coords[1]);
      tooltip.style.left = (event.pageX + 10) + 'px';
      tooltip.style.top = (event.pageY + 10) + 'px';
      tooltip.textContent = target.title;
      tooltip.classList.add('show');
    }
  });

  image.addEventListener('mouseout', function() {
    tooltip.classList.remove('show');
  });
});