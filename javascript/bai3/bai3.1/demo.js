// alert("Hello World");

// var n = parseInt("50");
// console.log(typeof x);
// console.log(typeof y);
// console.log(typeof z);
// console.log(typeof n);

// function demo() {
//   console.log("test function");
//   for (let i = 1; i <= 10; i++) {
//     if (i % 2 == 0) {
//       continue;
//     }
//     console.log(i);
//   }
// }
// demo();

// function person() {
//   console.log("DANH SÁCH THÀNH VIÊN NHÓM 6");
//   let per = ["Dung, Huyền, Linh, Loan, My"];
//   for (let i = 0; i < per.length; i++) {
//     console.log(per[i]);
//   }
// }
// person();

//for...in
// function person() {
//   let per = {
//     name: "Linh",
//     age: 20,
//     job: "Deverlop",
//   };
//   for (let key in per) {
//     console.log(key + ":" + per[key]);
//   }
// }
// person();

//Hàm ẩn danh
// var person = function () {
//   let per = {
//     name: "Linh",
//     age: 20,
//     job: "Deverlop",
//   };
//   for (let key in per) {
//     console.log(key + ":" + per[key]);
//   }
// };
// person();

// Hàm mũi tên
// let person = (name) => {
//   console.log("DANH SÁCH THÀNH VIÊN NHÓM 6:" + name);
// };
// person("Dung, Huyền, Linh, Loan, My");

// Hàm đệ quy
function factorial(n) {
  if (n === 0) return 1;
  return n * factorial(n - 1);
}

console.log(factorial(5));
