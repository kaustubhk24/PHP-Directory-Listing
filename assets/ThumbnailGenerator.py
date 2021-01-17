
# We are currently taking screenshot of 00:00:10:000 's Frame you can change value if you need
# If you want use this generator your videos must be named from 0 to the value of {number_of_videos} else it would not work..


import subprocess

number_of_videos=200


id=1
for id in range(number_of_videos):
    video_input_path = 'videos/{}.mp4'.format(id)
    img_output_path = 'images/{}.png'.format(id)
    print (img_output_path)
    subprocess.call(['ffmpeg', '-i', video_input_path, '-ss', '00:00:10.000', '-vframes', '1', img_output_path])


