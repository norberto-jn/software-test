import 'package:test/expect.dart';
import 'package:test/scaffolding.dart';

import 'matchcalc.dart';

void main() {

  test('should return sucess', () {
    expect(MatchCalc.getTotalDivisibleBy3Or5(10), 23);
  });

  test('should return sucess', () {
    expect(MatchCalc.getTotalDivisibleBy3Or5(11), 33);
  });

}