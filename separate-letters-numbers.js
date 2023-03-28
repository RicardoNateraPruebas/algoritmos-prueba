/*
Create an algorithm that runs through a one-dimensional array containing letters and numbers: [ "a”, 10, “b”, “hola”, 122, 15]
a. Get an array containing just the letters
b. Get an array containing just the numbers
c. Get the highest number from the array above
*/

const algorithm = (arr) => {
    const numbers = arr.filter(element => typeof element === "number");
    const letters = arr.filter(element => typeof element === "string");
    const highestNumber = Math.max(...numbers)
    console.log("Letters: ",letters)
    console.log("Numbers: ",numbers)
    console.log("Highest number: ",highestNumber)
}

algorithm([ "a", 10, "b", "hola", 122, 15])