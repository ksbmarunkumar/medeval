import React from 'react';
import ReactDOM from 'react-dom';

function User() {
    return (
        <h1>How To Install React in Laravel 9 with Vite</h1>
    );
}
export default User;
// DOM element
if (document.getElementById('user')) {
    ReactDOM.render(<User />, document.getElementById('user'));
}