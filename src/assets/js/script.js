const navBtn = lunar.el('[data-collapse-toggle]');
const nav = lunar.el('#navbar-sticky');

navBtn.event('click', () => {
    nav.toggleClass('hidden');
});

if (window.innerWidth <= 640) {
    lunar.clickOut(lunar.el('nav'), () => nav.addClass('hidden'));
    lunar.all('#navbar-sticky a').forEach(item => {
        item.event('click', () => nav.addClass('hidden'));
    });
}
