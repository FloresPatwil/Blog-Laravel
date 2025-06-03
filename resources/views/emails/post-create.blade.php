<x-mail::message>
# Correo por aprobar

<x-mail::panel>
    Se ha creado un nuevo post que requiere tu aprobación. Por favor, revisa el contenido y aprueba o rechaza la publicación.
</x-mail::panel>

<x-mail::button url="{{ route('posts.show', $post) }}"
    color="success">
    Click here to accept
</x-mail::button>

</x-mail::message>