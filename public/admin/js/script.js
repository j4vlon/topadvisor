function changeImg(event)
{
    const tmp_avatar = URL.createObjectURL(event.target.files[0]);
    document.querySelector('.change-img').setAttribute('src', tmp_avatar);
}
function changeBanner(event)
{
    const tmp_avatar = URL.createObjectURL(event.target.files[0]);
    document.querySelector('.change-banner').setAttribute('src', tmp_avatar);
}

