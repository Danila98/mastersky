require('./bootstrap');
console.log('gopa');
let photoProduct =  document.querySelector('.mini-photo-item');
photoProduct.addEventListener('click', sliderLast);

function sliderLast(){
    console.log(this.target);
    console.log('jopa');
}
