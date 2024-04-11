# Drupal Commons Traits

Este paquete proporciona una colección de traits reutilizables diseñados para facilitar el desarrollo de módulos en Drupal. Los traits están diseñados para ser incorporados en diferentes módulos para proporcionar funcionalidades comunes de manera eficiente y estandarizada.

## Características

- **Trait Ejemplo 1**: Describe lo que hace este trait.
- **Trait Ejemplo 2**: Proporciona una breve descripción de otro trait.

## Requisitos

- Drupal 9.0 o superior
- PHP 7.3 o superior

## Instalación

Para instalar el paquete, simplemente ejecuta el siguiente comando en la raíz de tu proyecto Drupal:

```bash
composer jorarmarfin/drupal-commons-traits
```
## Uso
Para utilizar uno de los traits incluidos en tu módulo, primero debes incluirlo en tu clase utilizando la declaración use. Aquí tienes un ejemplo de cómo hacerlo:

```php
use Drupal\CommonsTraits\Traits\TestTrait;

class MiClase {
  use TestTrait;

  public function miMetodo() {
    $this->test();
  }
}
```
## Contribuir
Este proyecto es de código abierto y las contribuciones son bienvenidas. Si tienes sugerencias de mejoras o nuevos traits, por favor abre un issue o envía un pull request.

## Licencia
Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo LICENSE en este repositorio para más información.