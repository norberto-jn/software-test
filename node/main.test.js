const item = require('./main')


describe('test total divisible by 3 or 5', () => {
    it('should return sucess', () => {
       expect(item.getTotalDivisibleBy3And5(10)).toBe(23)
    }),
    it('should return sucess', () => {
        expect( item.getTotalDivisibleBy3And5(11)).toBe(33)
     })
})