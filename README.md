# The Objective
This is an [exercise] from my BeCode course. The objective is to learn to work with PHP, specifically OOP *(object-oriented programming)*.

[exercise]: https://github.com/becodeorg/ANT-Lamarr-5.34/tree/main/2.The-Hill/php/4.oop-blackjackgame

## Timeline


1. Create class **Player** in file **Player.php** ✔️ *28.10.2021*
   <dl>
   <dt> Two private properties </dt>
        <dd> cards <em>(array)</em> <br>
        lost <em>(bool, default --> false)</em> </dd>
   <dt> Public methods</dt>
      <dd> hit <br> surrender <br> getScore <br> hasLost</dd>
   </dl>
2. Create class **Blackjack** in file **Blackjack.php** ✔️ *28.10.2021*
   <dl>
   <dt>Three private properties</dt>
      <dd>player <br> dealer <br> deck</dd>
   <dt>Public methods</dt>
      <dd>getPlayer <br> getDealer <br> getDeck</dd>
  </dl>

3. Constructor Blackjack ✔️ *28.10.2021*
   <dl>
   <dt>Instantiate Player</dt>
   <dt>Create deck Object</dt>
   <dt><u>Shuffle the deck</u></dt>
      <dd>What does this even mean??</dd>
   </dl>

4. Constructor Player ✔️ *28.10.2021*
   <dl>
   <dt>Expect Deck object as parameter.</dt>
   <dt>Pass Deck from Blackjack constructor.</dt>
      <dd>huh?!</dd>
   <dt>Make player draw 2 cards.</dt>
      <dd>existing method deck class.</dd>
   </dl>