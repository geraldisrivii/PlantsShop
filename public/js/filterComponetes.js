let inputs = document.querySelectorAll('.input-list')
let options = null;
for (const input of inputs) {
    input.addEventListener('click', function () {
        let optionsAll = document.querySelectorAll(`.input-list-box-options`);

        for (const optionsOne of optionsAll) {
            if (optionsOne.getAttribute('for') == input.getAttribute('id')) {
                options = optionsOne
                break;
            }
        }
        options.classList.toggle('input-list-box-options_active');
        for (const element of options.children) {
            buttons = element.querySelectorAll('.input-list-box-options__button');
            for (const button of buttons) {
                button.addEventListener('click', function () {
                    console.log(input)
                    input.value = button.innerText;
                    document.querySelector(`[for="${input.getAttribute('id')}"]`).textContent = button.innerText;
                    input.value = button.innerText;
                    console.log(input)
                    options.classList.toggle('input-list-box-options_active');
                })
            }
        }
    })
}
let listButtons = document.querySelectorAll('.input-list-box-options-list__button');
for (const button of listButtons) {
    button.addEventListener('mouseover', function () {
        let list = document.getElementById(button.getAttribute('for'))
        list.style.left = button.clientWidth + 'px';
        list.classList.toggle('input-list-box-options-list-options_active');
    });
}

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJmaWx0ZXJDb21wb25ldGVzLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImxldCBpbnB1dHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuaW5wdXQtbGlzdCcpXG5sZXQgb3B0aW9ucyA9IG51bGw7XG5mb3IgKGNvbnN0IGlucHV0IG9mIGlucHV0cykge1xuICAgIGlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICBsZXQgb3B0aW9uc0FsbCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoYC5pbnB1dC1saXN0LWJveC1vcHRpb25zYCk7XG5cbiAgICAgICAgZm9yIChjb25zdCBvcHRpb25zT25lIG9mIG9wdGlvbnNBbGwpIHtcbiAgICAgICAgICAgIGlmIChvcHRpb25zT25lLmdldEF0dHJpYnV0ZSgnZm9yJykgPT0gaW5wdXQuZ2V0QXR0cmlidXRlKCdpZCcpKSB7XG4gICAgICAgICAgICAgICAgb3B0aW9ucyA9IG9wdGlvbnNPbmVcbiAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICBvcHRpb25zLmNsYXNzTGlzdC50b2dnbGUoJ2lucHV0LWxpc3QtYm94LW9wdGlvbnNfYWN0aXZlJyk7XG4gICAgICAgIGZvciAoY29uc3QgZWxlbWVudCBvZiBvcHRpb25zLmNoaWxkcmVuKSB7XG4gICAgICAgICAgICBidXR0b25zID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuaW5wdXQtbGlzdC1ib3gtb3B0aW9uc19fYnV0dG9uJyk7XG4gICAgICAgICAgICBmb3IgKGNvbnN0IGJ1dHRvbiBvZiBidXR0b25zKSB7XG4gICAgICAgICAgICAgICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhpbnB1dClcbiAgICAgICAgICAgICAgICAgICAgaW5wdXQudmFsdWUgPSBidXR0b24uaW5uZXJUZXh0O1xuICAgICAgICAgICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGBbZm9yPVwiJHtpbnB1dC5nZXRBdHRyaWJ1dGUoJ2lkJyl9XCJdYCkudGV4dENvbnRlbnQgPSBidXR0b24uaW5uZXJUZXh0O1xuICAgICAgICAgICAgICAgICAgICBpbnB1dC52YWx1ZSA9IGJ1dHRvbi5pbm5lclRleHQ7XG4gICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGlucHV0KVxuICAgICAgICAgICAgICAgICAgICBvcHRpb25zLmNsYXNzTGlzdC50b2dnbGUoJ2lucHV0LWxpc3QtYm94LW9wdGlvbnNfYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0pXG59XG5sZXQgbGlzdEJ1dHRvbnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuaW5wdXQtbGlzdC1ib3gtb3B0aW9ucy1saXN0X19idXR0b24nKTtcbmZvciAoY29uc3QgYnV0dG9uIG9mIGxpc3RCdXR0b25zKSB7XG4gICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlb3ZlcicsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgbGV0IGxpc3QgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChidXR0b24uZ2V0QXR0cmlidXRlKCdmb3InKSlcbiAgICAgICAgbGlzdC5zdHlsZS5sZWZ0ID0gYnV0dG9uLmNsaWVudFdpZHRoICsgJ3B4JztcbiAgICAgICAgbGlzdC5jbGFzc0xpc3QudG9nZ2xlKCdpbnB1dC1saXN0LWJveC1vcHRpb25zLWxpc3Qtb3B0aW9uc19hY3RpdmUnKTtcbiAgICB9KTtcbn1cbiJdLCJmaWxlIjoiZmlsdGVyQ29tcG9uZXRlcy5qcyJ9
