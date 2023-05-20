# Pedimos al usuario que introduzca el número de frases que quiere introducir
num_frases = int(input("Introduce el número de frases que quieres guardar: "))

# Abrimos el archivo en modo escritura
with open("frases.txt", "w") as archivo:

    # Pedimos al usuario que introduzca cada una de las frases y las escribimos en el archivo
    for i in range(num_frases):
        frase = input("Introduce la frase {}:".format(i+1))
        archivo.write(frase + "\n")

# Abrimos el archivo en modo lectura
with open("frases.txt", "r") as archivo:

    # Leemos cada una de las frases del archivo
    frases = archivo.readlines()

    # Imprimimos cada frase y su número de caracteres
    for i, frase in enumerate(frases):
        print("Frase {} ({} caracteres): {}".format(i+1, len(frase.strip()), frase.strip()))
