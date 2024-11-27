let postId = document.getElementById('like-button').getAttribute('data-post-id');
let liked_posts = JSON.parse(localStorage.getItem('liked')) ?? [];


liked_posts.forEach((post, index) => {
    if (postId == post){
        document.querySelector('#like-button').style.display = 'none';
        document.querySelector('#like-button').disabled = true;
        document.querySelector('#like-full').style.display = 'block';
    }
});

document.getElementById('like-button').addEventListener('click', function() {
    var postId = this.getAttribute('data-post-id');

    console.log(postId);

    document.querySelector('#like-button').style.display = 'none';
    document.querySelector('#like-button').disabled = true;
    document.querySelector('#like-full').style.display = 'block';

    fetch(likeButtonAjax.ajax_url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'action': 'increment_likes',
            'post_id': postId
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            let liked_posts = localStorage.getItem('liked') ?? [];
            console.log([...liked_posts, postId]);
            localStorage.setItem('liked', JSON.stringify([...liked_posts, postId]));
            document.querySelector('#like_amount').innerHTML = data.data.likes;
        } else {
            console.error('Ошибка при увеличении лайков');
        }
    });
});
