import matplotlib.pyplot as plt
from matplotlib.pyplot import figure, show
import numpy as np
from scipy.io import wavfile


samplerate1, data1 = wavfile.read("./uploads/wave3.wav")

data1.shape
samples1 = data1.shape[0]
plt.plot(data1[:200])
plt.savefig('./graphs/final_graph.png')
#show()
