

    document.body.onload = () => {
        console.log('opened up user file');
        let openDetailsModal = document.getElementById("open-edit-details-modal")
        let closeDetailsModal = document.getElementById("close-edit-datails-modal")
        let editDetailsModal = document.getElementById("edit-details-modal")
        editDetailsModal.style.display = "none";

        openDetailsModal.onclick = () =>{
            editDetailsModal.style.display = "block";
        }

        closeDetailsModal.onclick = () =>{
            editDetailsModal.style.display = "none";
        }


    }
