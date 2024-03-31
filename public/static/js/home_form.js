
// Lấy ngày hiện tại
var now = new Date();
var dateString02 = now.toISOString().slice(0,10);

// Chuyển đổi thành chuỗi định dạng yyyy-mm-dd để có thể sử dụng cho input date
// Đặt giá trị của input "start-time" là thời gian hiện tại
document.getElementById("startTime").value = dateString02;
document.getElementById('startTime').setAttribute('min', dateString02);


const roundTrip = document.querySelector('#round-trip');
const oneWay = document.querySelector('#one-way');
const endTimeInput = document.querySelector('#endTime');

function updateEndTime() {
    const startTimeValue = document.getElementById("startTime").value;
    document.getElementById('endTime').setAttribute('min', startTimeValue);
    document.getElementById("endTime").value = startTimeValue;
}


roundTrip.addEventListener('change', () => {
    if (roundTrip.checked) {
        endTimeInput.style.display = 'block';
        endTimeInput.removeAttribute('disabled');
        updateEndTime();
    } else {
        endTimeInput.style.display = 'none';
        endTimeInput.setAttribute('disabled', 'disabled');
    }
});

oneWay.addEventListener('change', () => {
    if (oneWay.checked) {
        endTimeInput.style.display = 'none';
        endTimeInput.setAttribute('disabled', 'disabled');
    } else {
        endTimeInput.style.display = 'block';
        endTimeInput.removeAttribute('disabled');
        updateEndTime();
    }
});
const startTimeInput = document.querySelector('#startTime');

startTimeInput.onchange = () => {
    updateEndTime();
}
