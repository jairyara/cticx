let menu = document.getElementById('menu-items');
let btn = document.getElementById('menu-btn');

export const activeMenu = () => {
    if (!menu.classList.contains('menu-active')){
        menu.classList.add('menu-active');
        btn.classList.add('exit');
    } else {
        menu.classList.remove('menu-active');
        btn.classList.remove('exit');
    }
}
