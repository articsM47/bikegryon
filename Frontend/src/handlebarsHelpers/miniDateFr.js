const DAY_SHORT = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
const OPTIONS = {month: '2-digit', day: '2-digit'};

export default (strDate) => {
  let date = new Date(strDate);
  let day = DAY_SHORT[date.getDay()];
  return day + ' ' + date.toLocaleDateString('fr-CH', OPTIONS);
}