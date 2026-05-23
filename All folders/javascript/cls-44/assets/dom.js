// alert("Hello, World!");

// let paras = document.getElementsByTagName('p');
// console.log(paras[1]);

// let btn = document.getElementById('btn');
// console.log(btn);

// let ele = document.getElementsByClassName('ele');
// console.log(ele);
let btn = document.querySelector('#btn');
console.log(btn);
btn.textContent = "Login";
let ele = document.querySelectorAll('.ele');
console.log(ele);
// let head = document.querySelector('h1').textContent = "Welcome to JavaScript";
// console.log(head);

let head2 = document.querySelector('h2').textContent = "Welcome to Programming Language";
console.log(head2);

let section = document.querySelectorAll("#greet h2").textContent = "Welcome to JavaScript";
console.log(section);
// let section = document.querySelectorAll('section');
// console.log(section);


//textContent
//innerText
//innerHTML

document.querySelector("#para").innerText = "This is the <i>first</i> paragraph.";
document.querySelector("#para2").innerHTML = "<b>This is the <i>second</i> paragraph.</b>";