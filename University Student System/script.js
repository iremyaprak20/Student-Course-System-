const selectBox = document.getElementById('selectBox');
const addButton = document.getElementById('addBtn');
const selectList = document.getElementById('selectList');


let selectionCount = 0; // Track the number of selections made

addButton.addEventListener('click', function () {
    const selectOpt = selectBox.value;

    const selectLine = document.createElement('li');
    selectLine.className = 'selectLine';

    const selectText = document.createElement('span');
    selectText.textContent = selectOpt;

    const remButton = document.createElement('button');
    remButton.textContent = 'Delete';
    remButton.addEventListener('click', function () {
        selectLine.remove();
        const option = document.createElement('option');
        option.value = selectOpt;
        option.textContent = selectOpt;
        selectBox.appendChild(option);

        // Decrement the selection count when an item is removed
        selectionCount--;

        // Enable the addButton if selectionCount is less than 5
        if (selectionCount < 5) {
            addButton.disabled = false;
        }
    });

    selectLine.appendChild(selectText);
    selectLine.appendChild(remButton);

    selectList.appendChild(selectLine);

    const option = document.querySelector(`#selectBox option[value="${selectOpt}"]`);
    option.remove();

    // Increment the selection count
    selectionCount++;

    // Disable the addButton when selectionCount reaches 5
    if (selectionCount === 5) {
        addButton.disabled = true;
    }
});




var commentForm = document.getElementById("commentForm");
commentForm.addEventListener("submit", function(event) {
    event.preventDefault();
    var commentTextarea = commentForm.querySelector("textarea");
    var comment = commentTextarea.value.trim();

    if (comment !== "") {
        var email = "iremyaprak20@hotmail.com";
        var subject = "New Comment";
        var body = "A new comment has been submitted:\n\n" + comment;

        // Construct the mailto URL
        var mailtoURL = "mailto:" + email + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);

        // Open the default email client with the mailto URL
        window.location.href = mailtoURL;

        // Reset the comment textarea
        commentTextarea.value = "";
    }
});
//Log out Button
document.addEventListener('DOMContentLoaded', function() {
// Select the log out button
    var logoutBtn = document.querySelector('.logout-btn');

    // When the log out button is clicked
    logoutBtn.addEventListener('click', function() {

        // Redirect to the login page
        window.location.href = 'login.html';
    });
});

