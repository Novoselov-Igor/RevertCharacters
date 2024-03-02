<?php
use PHPUnit\Framework\TestCase;
include 'functions/revertCharacters.php';

class RevertCharactersTest extends TestCase {
public function testRevertCharacters() {
$this->assertEquals('Тевирп! Онвад ен ьсиледив.', revertCharacters('Привет! Давно не виделись.'));
$this->assertEquals('Абвгд! Ёжз ийклм нопрст.', revertCharacters('Дгвба! Зжё млкйи тсрпон.'));
$this->assertEquals('Hello! World.', revertCharacters('Olleh! Dlrow.'));
// Тест с пустой строкой
$this->assertEquals('', revertCharacters(''));
// Тест с одним словом
$this->assertEquals('drow', revertCharacters('word'));
// Тест с цифрами и специальными символами
$this->assertEquals('12345! @#$%', revertCharacters('54321! @#$%'));
}
}