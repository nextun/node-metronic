var $ = require('jquery');
class NotificationsMenu {
    constructor(){
        this.notificationsMenu = $('.dropdown-notification');
        this.events();
    }
    events(){
        this.notificationsMenu.click(
                () => {
                    console.log('We can load the notifications on this call');
                }
            );
    }
}

export default NotificationsMenu;