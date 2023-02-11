const trashIcon = document.querySelectorAll('.bi-trash3-fill');

// Delete the clicked feedback
trashIcon.forEach(icon => {
    const feedbackCard = icon.parentNode.offsetParent

    icon.addEventListener('click', () => {
        const cardId = feedbackCard.getAttribute('data-id');
        const id = cardId.split('-')[1];

        fetch(`./delete.php`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `id=${id}`,
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            feedbackCard.parentNode.removeChild(feedbackCard);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    });
})
