<x-modal-confirm 
    event-to-open-modal="custom-show-delete-modal"
    event-to-close-modal="ideaWasDeleted"
    modal-title="Delete Idea"
    modal-description="Are you sure you want to delete this idea? All of your data will be permanently removed.
    This action cannot be undone."
    modal-confirm-button-text="Delete"
    wire-click="deleteIdea"
/> 