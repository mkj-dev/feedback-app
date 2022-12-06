const trashIcon = document.querySelectorAll('.bi-trash3-fill');

// Delete the clicked feedback
trashIcon.forEach(icon => {
    const offsetParent = icon.parentNode.offsetParent

    icon.addEventListener('click', () => {
        offsetParent.parentNode.removeChild(offsetParent);
    });
})