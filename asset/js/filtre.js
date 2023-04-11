// Récupérer tous les boutons de tag
const tagBtns = document.querySelectorAll('.tag-btn');

// Gérer les clics sur les boutons de tag
tagBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    const selectedTag = btn.dataset.tag;
    
    // Masquer tous les posts qui ne sont pas associés au tag sélectionné
    const posts = document.querySelectorAll('.post');
    posts.forEach((post) => {
      if (!post.classList.contains(selectedTag)) {
        post.style.display = 'none';
      } else {
        post.style.display = '';
      }
    });
    
    // Mettre à jour les variables CSS pour changer la couleur des éléments de l'interface globale
    document.documentElement.style.setProperty('--primary-color', getColorForTag(selectedTag));
  });
});

// Fonction utilitaire pour récupérer la couleur associée à un tag
function getColorForTag(tag) {
  // Retourner la couleur correspondante pour chaque tag
  switch (tag) {
    case 'tag1':
      return '#ff0000';
    case 'tag2':
      return '#00ff00';
    case 'tag3':
      return '#0000ff';
    // Ajouter d'autres couleurs pour les autres tags
    default:
      return '#000000';
  }
}


