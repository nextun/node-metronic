import $ from 'jquery';

class NotificationsModule {
    constructor(){
        this.notification_button = $('.dropdown-notification');
        console.log('Logged');
    }

    events(){
        this.notification_button.click(console.log('We can refresh the notifications here'));
    }

    refreshNotifications(){
        console.log('We can refresh the notifications here');
    }
}

export default NotificationsModule;