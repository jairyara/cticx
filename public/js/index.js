const btn = document.getElementById('menu-btn');

btn.addEventListener('click', async () => {
    const module = await import('./header.js');
    module.activeMenu();
});
