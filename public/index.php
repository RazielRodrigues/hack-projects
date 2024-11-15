<?hh

<<__EntryPoint>>
function main(): void {
  echo "Hello World!\n";
}

  /**
   * 1. array precisa estar ordenado
   * 2. pega a posição zero do array essa esse é o ponteiro inicial, e pega a ultima posição ponteiro final
   * 3. loop while enquanto o inicio for menor que o FIM!
   * 4. posicação de parada é se voce encontrou o que voce quer por exemplo uma letra ou a soma de numeros
   * 5. a partir do if da parada criamos um else if e um else, no else if colocamos para andar o ponteiro do final ou seja diminuimos o seu valor
   * 6. no else aumentamos o ponteiro da frente assim para fazer os dois se encontrarem em algum momento e o INICIO ser maior que o FIM pausando entao o loop while
   */
  function twoSum($nums, $target) {
      sort($nums);
  
      $start = 0;
      $end = count($nums) - 1;

      while ($start < $end) {
          $sum = $nums[$start] + $nums[$end];

          if ($sum == $target) {
              return [$start, $end];
          }else if($sum > $target) {
              $end--;
          }else{
              $start++;
          }
      }


    }
    
        /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        
        $start = 0;
        $end = count($s) - 1;

        while ($start < $end) {
            $x = $s[$start];
            $s[$start] = $s[$end];
            $s[$end] = $x;

            $start++;
            $end--;
        }
        }
