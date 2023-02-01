function changeImg(event)
{
    const tmp_avatar = URL.createObjectURL(event.target.files[0]);
    document.querySelector('.change-img').setAttribute('src', tmp_avatar);
}
function changeImgDescr(event)
{
    const tmp_avatar = URL.createObjectURL(event.target.files[0]);
    document.querySelector('.change-img-descr').setAttribute('src', tmp_avatar);
}

