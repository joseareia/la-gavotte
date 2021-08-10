import { Notyf } from 'notyf';
import 'notyf/notyf.min.css';

var notyf = {
    error: function(message) {
        const notification = new Notyf();
        notification.error({
            message: message,
            duration: 2000,
            dismissible: true
        });
    },

    success: function(message) {
        const notification = new Notyf();
        notification.success({
            message: message,
            duration: 2000,
            dismissible: true
        });
    }
};
export default notyf;
