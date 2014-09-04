    // todo:
// Create an array holding the names of the planets of our solar system (in order, starting closest to the sun).
var planets = ['mercury', 'venus', 'earth', 'mars', 'jupiter', 'saturn', 'uranus', 'neptune'];

// function for logging the planets array
function logPlanets() {
    console.log('Here is the list of planets:');
    console.log(planets);
}

console.log('Adding "The Sun" to the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.unshift('The Sun');
logPlanets();

console.log('Adding "Pluto" to the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.push('Pluto');
logPlanets();

console.log('Removing "The Sun" from the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.shift('The Sun');
logPlanets();


console.log('Removing "Pluto" from the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.pop('Pluto');
logPlanets();

console.log('Finding and logging the index of "Earth" in the planets array.');
// todo: Do what the log statement above says you will do.
Index = planets.indexOf('earth');
console.log("Index of Earth is" + Index);

console.log('Using splice to remove the planet after Earth.');
// todo: Do what the log statement above says you will do.
var removed = planets.splice(Index + 1, 1);
logPlanets();

console.log('Using splice to add back the planet after Earth.');
// todo: Do what the log statement above says you will do.
planets.splice(planets.indexOf('earth') + 1, 0, removed[0]);
logPlanets();

console.log('Reversing the order of the planets array.');
// todo: Do what the log statement above says you will do.
planets.reverse();
logPlanets();

console.log('Sorting the planets array.');
// todo: Do what the log statement above says you will do.
planets.sort();
logPlanets();
