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

// Form
let form = lunar.el('form');
lunar.all('form *').forEach(item => {
    item.event('focus', () => {
        form.addClass('outline-purple-500');
        form.removeClass('outline-transparent');
    });
    item.event('focusout', () => {
        form.removeClass('outline-purple-500');
        form.addClass('outline-transparent');
    });
});

form.event('submit', e => {
    e.preventDefault();
    lunar.el(modal).removeClass('lunar-hidden')
    lunar.show(lunar.el(modal));
});

lunar.el("[data-toggle='#modal']").event('click', () => {
    setTimeout(() => {
        location.reload();
    }, 350);
});
