function drop()
{
   
        const modal = document.querySelector("#modal");
        const openModal = document.querySelector("#reg");
        const closeModal = document.querySelector("#close");
    
        openModal.addEventListener('click', () => {
            modal.showModal();
        })
    
        closeModal.addEventListener('click', () => {
            modal.close();
        })
    
}