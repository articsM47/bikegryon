export default (date) => {
  let option = {weekday: "long", year: "numeric", month: "long", day: "numeric"};
  return (new Date(date)).toLocaleString('fr-CH', option);
}