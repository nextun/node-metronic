var $ = require('jquery');
class NotificationsMenu {
    constructor(){
        this.notificationsMenu = $('.dropdown-notification');
        this.events();
    }

    events(){
        this.notificationsMenu.click(
                () => {
                    console.log('Notifications clicked');
                }
            );
    }
}

export default NotificationsMenu;