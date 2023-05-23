//nam.15Apr
async function Tutor() {                   
    await sleep(5000);    
    console.log("here")
    document.getElementById('nam').click();
}

let loadMoreBtn= document.querySelector('#loadSPMore');
loadMoreBtn.onclick= ()=>{
    //console.log("click ne");
    //let nam= document.querySelector('#nam');
    //Tutor()
    //document.getElementById('nam').click();    
    let checkEndSP= document.getElementById('endSPMore');
    let changeBtnLoadSPMore= document.getElementById('loadSPMore');
        
    if(checkEndSP.value==1){
        changeBtnLoadSPMore.disabled= true;
    }
       
}

