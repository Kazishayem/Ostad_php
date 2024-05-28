
const candyGrid = document.getElementById('candy-grid');

for (let i = 0; i < 25; i++) {
    const candy = document.createElement('div');
    candy.className = 'candy';
    candyGrid.appendChild(candy);
}