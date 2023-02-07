/**
 * We need a function to get JSON
 * messages and to print them correctly.
 */
function getMessages() {
    // 1. It must create an AJAX request to connect to the server and to the handler.php file.
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open("GET", "./assets/handler.php");

    // 2. When data is receive, execute them (with JSON) and print HTML data.
    requeteAjax.onload = function () {
        const resultat = JSON.parse(requeteAjax.responseText);
        const html = resultat.reverse().map(function (message) {
            return `
          <div class="message">
            <span class="date">${message.created_at.substring(11, 16)}</span>
            <span class="user">${message.user}</span> : 
            <span class="content">${message.content}</span>
          </div>
        `
        }).join('');

        const messages = document.querySelector('.messages');

        messages.innerHTML = html;
        messages.scrollTop = messages.scrollHeight;
    }

    // 3. Send Request.
    requeteAjax.send();
}

/**
 * A function to send new message to server and refresh old messages.
 */

function postMessage(event) {
    // 1. Elle doit stoper le submit du formulaire
    event.preventDefault();

    // 2. Get data from form.
    const user = document.querySelector('#user');
    const content = document.querySelector('#content');

    // 3. Conditioning data
    const data = new FormData();
    data.append('user', user.value);
    data.append('content', content.value);

    // 4. Configure AJAX request in POST method and send data.
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open('POST', './assets/handler.php?task=write');

    requeteAjax.onload = function () {
        content.value = '';
        content.focus();
        getMessages();
    }

    requeteAjax.send(data);
}

document.querySelector('form').addEventListener('submit', postMessage);

/**
 * Set a 3s refresh interval.
 */
const interval = window.setInterval(getMessages, 3000);

getMessages();