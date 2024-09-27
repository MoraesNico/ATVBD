document.querySelector('.menu-button').addEventListener('mouseover', function() {
    document.querySelector('.dropdown').style.display = 'block';
});

document.querySelector('.menu').addEventListener('mouseleave', function() {
    document.querySelector('.dropdown').style.display = 'none';
});
