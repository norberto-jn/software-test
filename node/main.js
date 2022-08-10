function  getTotalDivisibleBy3Or5(num) {

    let total = 0

    for (let number = 0; number < num; number++)
        if (number % 3 == 0 || number % 5 == 0)
            total += number
    return total
}

console.log( getTotalDivisibleBy3Or5(10))

module.exports = { getTotalDivisibleBy3Or5 }