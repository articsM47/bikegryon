const DAY_SHORT = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
const OPTIONS = {hour: '2-digit', minute: '2-digit'};

export default (strDate) => {
  let date = new Date(strDate);
  return date.toLocaleTimeString('fr-CH', OPTIONS);
}