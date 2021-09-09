function showSuccessModal() {
    console.log('Submited Form Successfully.');
    const id = document.getElementById('idcard')
    const sirname = document.getElementById('sirname')
    const namee = document.getElementById('name')
    const lastname = document.getElementById('lastname')
    const address = document.getElementById('address')
    const tumbol = document.getElementById('tumbol')
    const ampor = document.getElementById('ampor')
    const province = document.getElementById('province')
    const postcal = document.getElementById('postcal')
    const phone = document.getElementById('phone')
    const form = document.getElementById('form')
    document.getElementById('sid').innerHTML += 
    id.value;
    document.getElementById('successFullName').innerHTML +=
    sirname.value + namee.value + ' ' + lastname.value;
    document.getElementById('sadd').innerHTML =
    address.value + ' ' + 'ต.' +tumbol.value + ' ' + 'อ.' +ampor.value + ' ' + 'จ.' +province.value + ' ' + postcal.value;
    document.getElementById('sphone').innerHTML = phone.value;
    $('#successModal').modal('show');
}

const id = document.getElementById('idcard')
const sirname = document.getElementById('sirname')
const namee = document.getElementById('name')
const lastname = document.getElementById('lastname')
const address = document.getElementById('address')
const tumbol = document.getElementById('tumbol')
const ampor = document.getElementById('ampor')
const province = document.getElementById('province')
const postcal = document.getElementById('postcal')
const phone = document.getElementById('phone')
const form = document.getElementById('form')


form.addEventListener('submit', function (e) {
    if (form.checkValidity() === false) {
        e.preventDefault();
        e.stopPropagation();
    } else {
        e.preventDefault();
        console.log('submiting...');
        showSuccessModal();
        console.log(id.value);
        console.log(sirname.value);
        console.log(namee.value);
        console.log(lastname.value);
        console.log(address.value);
        console.log(tumbol.value);
        console.log(ampor.value);
        console.log(province.value);
        console.log(postcal.value);
        console.log(phone.value);
    }
    form.classList.add('was-validated');
})

