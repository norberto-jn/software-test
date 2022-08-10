class MatchCalc {

  static int getTotalDivisibleBy3Or5(num) {
    int total = 0;

    for (var number = 0; number < num; number++)
      if (number % 3 == 0 || number % 5 == 0) total += number;

    return total;
  }

}
