const submit = document.getElementById("submit");

submit.addEventListener("click",function checkForm (e) {
    const name=document.getElementById("name").value.trim();
    const companyName=document.getElementById("companyName").value.trim();
    const email=document.getElementById("email").value.trim();
    const age=document.getElementById("age").value.trim();
    const message=document.getElementById("message").value.trim();

    if(
        name === "" ||
        companyName === "" ||
        email === "" ||
        age === "" ||
        message === ""
    ) {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        e.preventDefault();
        return;
    }

    const result = confirm(
            "下記の内容を本当に送信しますか？\n\n" +
            "お名前→" + name + "\n" +
            "会社名→" + companyName + "\n" +
            "メールアドレス→" + email + "\n" +
            "年齢→" + age + "\n" +
            "お問い合わせ内容→" + message
        );

        if(!result){
            e.preventDefault();
        }
});

const colorBtn = document.getElementById("colorBtn");

const colors = ["blue","red","yellow","gray"];
let i = 0;

colorBtn.addEventListener("click",function(){
    document.body.style.backgroundColor = colors[i];

    i++;
    if(i >= colors.length){
        i = 0;
    }
});
