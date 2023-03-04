const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  const img = card.getAttribute('data-img');
  card.style.backgroundImage = `url(${img})`;
});
